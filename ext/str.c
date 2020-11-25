
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "str.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *str_camel_ce;
zend_class_entry *str_sign_ce;
zend_class_entry *str_tools_ce;

ZEND_DECLARE_MODULE_GLOBALS(str)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(str)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(Str_Camel);
	ZEPHIR_INIT(Str_Sign);
	ZEPHIR_INIT(Str_Tools);
	
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(str)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_str_globals *str_globals TSRMLS_DC)
{
	str_globals->initialized = 0;

	/* Cache Enabled */
	str_globals->cache_enabled = 1;

	/* Recursive Lock */
	str_globals->recursive_lock = 0;

	/* Static cache */
	memset(str_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);

	
	
}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_str_globals *str_globals TSRMLS_DC)
{
	
}

static PHP_RINIT_FUNCTION(str)
{
	zend_str_globals *str_globals_ptr;
	str_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(str_globals_ptr);
	zephir_initialize_memory(str_globals_ptr);

	
	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(str)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}



static PHP_MINFO_FUNCTION(str)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_STR_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_STR_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_STR_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_STR_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_STR_ZEPVERSION);
	php_info_print_table_end();
	
	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(str)
{
#if defined(COMPILE_DL_STR) && defined(ZTS)
	ZEND_TSRMLS_CACHE_UPDATE();
#endif

	php_zephir_init_globals(str_globals);
	php_zephir_init_module_globals(str_globals);
}

static PHP_GSHUTDOWN_FUNCTION(str)
{
	
}


zend_function_entry php_str_functions[] = {
	ZEND_FE_END

};

static const zend_module_dep php_str_deps[] = {
	
	ZEND_MOD_END
};

zend_module_entry str_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	php_str_deps,
	PHP_STR_EXTNAME,
	php_str_functions,
	PHP_MINIT(str),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(str),
#else
	NULL,
#endif
	PHP_RINIT(str),
	PHP_RSHUTDOWN(str),
	PHP_MINFO(str),
	PHP_STR_VERSION,
	ZEND_MODULE_GLOBALS(str),
	PHP_GINIT(str),
	PHP_GSHUTDOWN(str),
#ifdef ZEPHIR_POST_REQUEST
	PHP_PRSHUTDOWN(str),
#else
	NULL,
#endif
	STANDARD_MODULE_PROPERTIES_EX
};

/* implement standard "stub" routine to introduce ourselves to Zend */
#ifdef COMPILE_DL_STR
# ifdef ZTS
ZEND_TSRMLS_CACHE_DEFINE()
# endif
ZEND_GET_MODULE(str)
#endif
