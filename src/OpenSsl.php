<?php
/**
 * Caridea
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * @copyright 2015-2016 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */
namespace Caridea\Random;

/**
 * A provider of cryptographically-strong random bytes using OpenSSL.
 *
 * @copyright 2015-2016 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */
class OpenSsl implements Generator
{
    public function generate($length)
    {
        $bytes = '';
        $length = (int)$length;
        
        if (self::isAvailable()) {
            $bytes = openssl_random_pseudo_bytes($length);
        }
        
        return str_pad($bytes, $length, chr(0));
    }
    
    /**
     * Determines whether this provider can be run (e.g. all needed PHP extensions are available).
     *
     * @return bool Whether this provider is available
     */
    public static function isAvailable()
    {
        return function_exists('openssl_random_pseudo_bytes');
    }
}
