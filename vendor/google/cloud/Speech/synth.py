# Copyright 2018 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import synthtool as s
import synthtool.gcp as gcp
import logging

logging.basicConfig(level=logging.DEBUG)

gapic = gcp.GAPICGenerator()
common = gcp.CommonTemplates()

for version in ['V1', 'V1p1beta1']:
    lower_version = version.lower()

    library = gapic.php_library(
        service='speech',
        version=lower_version,
        artman_output_name=f'google-cloud-speech-{lower_version}')

    # copy all src except partial veneer classes
    s.move(library / f'src/{version}/Gapic')
    s.move(library / f'src/{version}/resources')

    # copy proto files to src also
    s.move(library / f'proto/src/Google/Cloud/Speech', f'src/')
    s.move(library / f'tests/')

    # copy GPBMetadata file to metadata
    s.move(library / f'proto/src/GPBMetadata/Google/Cloud/Speech', f'metadata/')

# fix year
s.replace(
    '**/Gapic/*GapicClient.php',
    r'Copyright \d{4}',
    r'Copyright 2017')
s.replace(
    '**/V1p1beta1/Gapic/*GapicClient.php',
    r'Copyright \d{4}',
    r'Copyright 2018')
s.replace(
    'tests/**/V1*/*Test.php',
    r'Copyright \d{4}',
    r'Copyright 2018')

# Use new namespace in the doc sample. See
# https://github.com/googleapis/gapic-generator/issues/2141
s.replace(
    'src/*/Gapic/SpeechGapicClient.php',
    r'RecognitionConfig_AudioEncoding',
    r'RecognitionConfig\\AudioEncoding')
# Change the wording for the deprecation warning.
s.replace(
    'src/*/*_*.php',
    r'will be removed in the next major release',
    'will be removed in a future release')
