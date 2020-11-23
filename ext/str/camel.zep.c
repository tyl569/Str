
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/string.h"
#include "kernel/operators.h"
#include "kernel/object.h"


ZEPHIR_INIT_CLASS(Str_Camel) {

	ZEPHIR_REGISTER_CLASS(Str, Camel, str, camel, str_camel_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Str_Camel, convert) {

	unsigned char _3$$3, _5$$4, _7$$5;
	zend_bool _0;
	zend_long i = 0, _1, _2;
	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	char symbol;
	zval *str_param = NULL, *symbol_param = NULL, _4$$4, _6$$4;
	zval str, after;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&str);
	ZVAL_UNDEF(&after);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_6$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &str_param, &symbol_param);

	zephir_get_strval(&str, str_param);
	symbol = zephir_get_charval(symbol_param);


	ZEPHIR_INIT_VAR(&after);
	ZVAL_STRING(&after, "");
	_2 = zephir_fast_strlen_ev(&str);
	_1 = 0;
	_0 = 0;
	if (_1 <= _2) {
		while (1) {
			if (_0) {
				_1++;
				if (!(_1 <= _2)) {
					break;
				}
			} else {
				_0 = 1;
			}
			i = _1;
			_3$$3 = ZEPHIR_STRING_OFFSET(&str, i);
			if (_3$$3 == symbol) {
				ZEPHIR_INIT_NVAR(&_4$$4);
				_5$$4 = ZEPHIR_STRING_OFFSET(&str, (i + 1));
				ZEPHIR_INIT_NVAR(&_6$$4);
				ZVAL_STRINGL(&_6$$4, &_5$$4, 1);
				zephir_fast_strtoupper(&_4$$4, &_6$$4);
				zephir_concat_self(&after, &_4$$4);
				i = (i + 1);
			} else {
				_7$$5 = ZEPHIR_STRING_OFFSET(&str, i);
				zephir_concat_self_char(&after, _7$$5);
			}
		}
	}
	RETURN_CTOR(&after);

}

