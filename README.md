# http-constants
[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/http-constants.svg?style=flat-square)](https://packagist.org/packages/repat/http-constants)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/http-constants.svg?style=flat-square)](https://packagist.org/packages/repat/http-constants)

**http-constants** is a package with a list of HTTP codes. Every constant begins with `HTTP_` and is wrapped in a `if(!defined('HTTP_CODE'))` to avoid conflicts.

Shoutout to [`legendarydrew/http-constants`](https://github.com/legendarydrew/http-constants) for the base of this package.

## Installation
`$ composer require repat/http-constants`

## List of Codes
* `HTTP_CONTINUE`: 100
* `HTTP_SWITCHING_PROTOCOLS`: 101
* `HTTP_PROCESSING`: 102
* `HTTP_OK`: 200
* `HTTP_CREATED`: 201
* `HTTP_ACCEPTED`: 202
* `HTTP_NON_AUTHORITATIVE_INFORMATION`: 203
* `HTTP_NO_CONTENT`: 204
* `HTTP_RESET_CONTENT`: 205
* `HTTP_PARTIAL_CONTENT`: 206
* `HTTP_MULTI_STATUS`: 207
* `HTTP_ALREADY_REPORTED`: 208
* `HTTP_IM_USED`: 226
* `HTTP_MULTIPLE_CHOICES`: 300
* `HTTP_MOVED_PERMANENTLY`: 301
* `HTTP_FOUND`: 302
* `HTTP_SEE_OTHER`: 303
* `HTTP_NOT_MODIFIED`: 304
* `HTTP_USE_PROXY`: 305
* `HTTP_RESERVED`: 306
* `HTTP_TEMPORARY_REDIRECT`: 307
* `HTTP_PERMANENTLY_REDIRECT`: 308
* `HTTP_BAD_REQUEST`: 400
* `HTTP_UNAUTHORIZED`: 401
* `HTTP_PAYMENT_REQUIRED`: 402
* `HTTP_FORBIDDEN`: 403
* `HTTP_NOT_FOUND`: 404
* `HTTP_METHOD_NOT_ALLOWED`: 405
* `HTTP_NOT_ACCEPTABLE`: 406
* `HTTP_PROXY_AUTHENTICATION_REQUIRED`: 407
* `HTTP_REQUEST_TIMEOUT`: 408
* `HTTP_CONFLICT`: 409
* `HTTP_GONE`: 410
* `HTTP_LENGTH_REQUIRED`: 411
* `HTTP_PRECONDITION_FAILED`: 412
* `HTTP_REQUEST_ENTITY_TOO_LARGE`: 413
* `HTTP_REQUEST_URI_TOO_LONG`: 414
* `HTTP_UNSUPPORTED_MEDIA_TYPE`: 415
* `HTTP_REQUESTED_RANGE_NOT_SATISFIABLE`: 416
* `HTTP_EXPECTATION_FAILED`: 417
* `HTTP_I_AM_A_TEAPOT`: 418
* `HTTP_MISDIRECTED_REQUEST`: 421
* `HTTP_UNPROCESSABLE_ENTITY`: 422
* `HTTP_LOCKED`: 423
* `HTTP_FAILED_DEPENDENCY`: 424
* `HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL`: 425
* `HTTP_UPGRADE_REQUIRED`: 426
* `HTTP_PRECONDITION_REQUIRED`: 428
* `HTTP_TOO_MANY_REQUESTS`: 429
* `HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE`: 431
* `HTTP_UNAVAILABLE_FOR_LEGAL_REASONS`: 451
* `HTTP_INTERNAL_SERVER_ERROR`: 500
* `HTTP_NOT_IMPLEMENTED`: 501
* `HTTP_BAD_GATEWAY`: 502
* `HTTP_SERVICE_UNAVAILABLE`: 503
* `HTTP_GATEWAY_TIMEOUT`: 504
* `HTTP_VERSION_NOT_SUPPORTED`: 505
* `HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL`: 506
* `HTTP_INSUFFICIENT_STORAGE`: 507
* `HTTP_LOOP_DETECTED`: 508
* `HTTP_NOT_EXTENDED`: 510
* `HTTP_NETWORK_AUTHENTICATION_REQUIRED`: 511

## License
* MIT, see [LICENSE](https://github.com/repat/http-constants/blob/master/LICENSE)

## Version
* Version 0.1

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/http-constants&title=http-constants&language=&tags=github&category=software)
