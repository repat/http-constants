<?php
if (!defined('HTTP_CONTINUE')) {
    define('HTTP_CONTINUE', 100);
}
if (!defined('HTTP_SWITCHING_PROTOCOLS')) {
    define('HTTP_SWITCHING_PROTOCOLS', 101);
}
if (!defined('HTTP_PROCESSING')) {
    define('HTTP_PROCESSING', 102); // RFC2518
}
if (!defined('HTTP_OK')) {
    define('HTTP_OK', 200);
}
if (!defined('HTTP_CREATED')) {
    define('HTTP_CREATED', 201);
}
if (!defined('HTTP_ACCEPTED')) {
    define('HTTP_ACCEPTED', 202);
}
if (!defined('HTTP_NON_AUTHORITATIVE_INFORMATION')) {
    define('HTTP_NON_AUTHORITATIVE_INFORMATION', 203);
}
if (!defined('HTTP_NO_CONTENT')) {
    define('HTTP_NO_CONTENT', 204);
}
if (!defined('HTTP_RESET_CONTENT')) {
    define('HTTP_RESET_CONTENT', 205);
}
if (!defined('HTTP_PARTIAL_CONTENT')) {
    define('HTTP_PARTIAL_CONTENT', 206);
}
if (!defined('HTTP_MULTI_STATUS')) {
    define('HTTP_MULTI_STATUS', 207); // RFC4918
}
if (!defined('HTTP_ALREADY_REPORTED')) {
    define('HTTP_ALREADY_REPORTED', 208); // RFC5842
}
if (!defined('HTTP_IM_USED')) {
    define('HTTP_IM_USED', 226); // RFC3229
}
if (!defined('HTTP_MULTIPLE_CHOICES')) {
    define('HTTP_MULTIPLE_CHOICES', 300);
}
if (!defined('HTTP_MOVED_PERMANENTLY')) {
    define('HTTP_MOVED_PERMANENTLY', 301);
}
if (!defined('HTTP_FOUND')) {
    define('HTTP_FOUND', 302);
}
if (!defined('HTTP_SEE_OTHER')) {
    define('HTTP_SEE_OTHER', 303);
}
if (!defined('HTTP_NOT_MODIFIED')) {
    define('HTTP_NOT_MODIFIED', 304);
}
if (!defined('HTTP_USE_PROXY')) {
    define('HTTP_USE_PROXY', 305);
}
if (!defined('HTTP_RESERVED')) {
    define('HTTP_RESERVED', 306);
}
if (!defined('HTTP_TEMPORARY_REDIRECT')) {
    define('HTTP_TEMPORARY_REDIRECT', 307);
}
if (!defined('HTTP_PERMANENTLY_REDIRECT')) {
    define('HTTP_PERMANENTLY_REDIRECT', 308); // RFC7238
}
if (!defined('HTTP_BAD_REQUEST')) {
    define('HTTP_BAD_REQUEST', 400);
}
if (!defined('HTTP_UNAUTHORIZED')) {
    define('HTTP_UNAUTHORIZED', 401);
}
if (!defined('HTTP_PAYMENT_REQUIRED')) {
    define('HTTP_PAYMENT_REQUIRED', 402);
}
if (!defined('HTTP_FORBIDDEN')) {
    define('HTTP_FORBIDDEN', 403);
}
if (!defined('HTTP_NOT_FOUND')) {
    define('HTTP_NOT_FOUND', 404);
}
if (!defined('HTTP_METHOD_NOT_ALLOWED')) {
    define('HTTP_METHOD_NOT_ALLOWED', 405);
}
if (!defined('HTTP_NOT_ACCEPTABLE')) {
    define('HTTP_NOT_ACCEPTABLE', 406);
}
if (!defined('HTTP_PROXY_AUTHENTICATION_REQUIRED')) {
    define('HTTP_PROXY_AUTHENTICATION_REQUIRED', 407);
}
if (!defined('HTTP_REQUEST_TIMEOUT')) {
    define('HTTP_REQUEST_TIMEOUT', 408);
}
if (!defined('HTTP_CONFLICT')) {
    define('HTTP_CONFLICT', 409);
}
if (!defined('HTTP_GONE')) {
    define('HTTP_GONE', 410);
}
if (!defined('HTTP_LENGTH_REQUIRED')) {
    define('HTTP_LENGTH_REQUIRED', 411);
}
if (!defined('HTTP_PRECONDITION_FAILED')) {
    define('HTTP_PRECONDITION_FAILED', 412);
}
if (!defined('HTTP_REQUEST_ENTITY_TOO_LARGE')) {
    define('HTTP_REQUEST_ENTITY_TOO_LARGE', 413);
}
if (!defined('HTTP_REQUEST_URI_TOO_LONG')) {
    define('HTTP_REQUEST_URI_TOO_LONG', 414);
}
if (!defined('HTTP_UNSUPPORTED_MEDIA_TYPE')) {
    define('HTTP_UNSUPPORTED_MEDIA_TYPE', 415);
}
if (!defined('HTTP_REQUESTED_RANGE_NOT_SATISFIABLE')) {
    define('HTTP_REQUESTED_RANGE_NOT_SATISFIABLE', 416);
}
if (!defined('HTTP_EXPECTATION_FAILED')) {
    define('HTTP_EXPECTATION_FAILED', 417);
}
if (!defined('HTTP_I_AM_A_TEAPOT')) {
    define('HTTP_I_AM_A_TEAPOT', 418); // RFC2324
}
if (!defined('HTTP_MISDIRECTED_REQUEST')) {
    define('HTTP_MISDIRECTED_REQUEST', 421); // RFC7540
}
if (!defined('HTTP_UNPROCESSABLE_ENTITY')) {
    define('HTTP_UNPROCESSABLE_ENTITY', 422); // RFC4918
}
if (!defined('HTTP_LOCKED')) {
    define('HTTP_LOCKED', 423); // RFC4918
}
if (!defined('HTTP_FAILED_DEPENDENCY')) {
    define('HTTP_FAILED_DEPENDENCY', 424); // RFC4918
}
if (!defined('HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL')) {
    define('HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL', 425); // RFC2817
}
if (!defined('HTTP_UPGRADE_REQUIRED')) {
    define('HTTP_UPGRADE_REQUIRED', 426); // RFC2817
}
if (!defined('HTTP_PRECONDITION_REQUIRED')) {
    define('HTTP_PRECONDITION_REQUIRED', 428); // RFC6585
}
if (!defined('HTTP_TOO_MANY_REQUESTS')) {
    define('HTTP_TOO_MANY_REQUESTS', 429); // RFC6585
}
if (!defined('HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE')) {
    define('HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE', 431); // RFC6585
}
if (!defined('HTTP_UNAVAILABLE_FOR_LEGAL_REASONS')) {
    define('HTTP_UNAVAILABLE_FOR_LEGAL_REASONS', 451);
}
if (!defined('HTTP_INTERNAL_SERVER_ERROR')) {
    define('HTTP_INTERNAL_SERVER_ERROR', 500);
}
if (!defined('HTTP_NOT_IMPLEMENTED')) {
    define('HTTP_NOT_IMPLEMENTED', 501);
}
if (!defined('HTTP_BAD_GATEWAY')) {
    define('HTTP_BAD_GATEWAY', 502);
}
if (!defined('HTTP_SERVICE_UNAVAILABLE')) {
    define('HTTP_SERVICE_UNAVAILABLE', 503);
}
if (!defined('HTTP_GATEWAY_TIMEOUT')) {
    define('HTTP_GATEWAY_TIMEOUT', 504);
}
if (!defined('HTTP_VERSION_NOT_SUPPORTED')) {
    define('HTTP_VERSION_NOT_SUPPORTED', 505);
}
if (!defined('HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL')) {
    define('HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL', 506); // RFC2295
}
if (!defined('HTTP_INSUFFICIENT_STORAGE')) {
    define('HTTP_INSUFFICIENT_STORAGE', 507); // RFC4918
}
if (!defined('HTTP_LOOP_DETECTED')) {
    define('HTTP_LOOP_DETECTED', 508); // RFC5842
}
if (!defined('HTTP_NOT_EXTENDED')) {
    define('HTTP_NOT_EXTENDED', 510); // RFC2774
}
if (!defined('HTTP_NETWORK_AUTHENTICATION_REQUIRED')) {
    define('HTTP_NETWORK_AUTHENTICATION_REQUIRED', 511); // RFC6585
}
