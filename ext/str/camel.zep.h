
extern zend_class_entry *str_camel_ce;

ZEPHIR_INIT_CLASS(Str_Camel);

PHP_METHOD(Str_Camel, convert);

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_str_camel_convert, 0, 2, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_str_camel_convert, 0, 2, IS_STRING, NULL, 0)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, str, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, str)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, symbol, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, symbol)
#endif
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(str_camel_method_entry) {
	PHP_ME(Str_Camel, convert, arginfo_str_camel_convert, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_FE_END
};
