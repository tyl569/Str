
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_STR_H
#define PHP_STR_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_STR_NAME        "str"
#define PHP_STR_VERSION     "0.0.1"
#define PHP_STR_EXTNAME     "str"
#define PHP_STR_AUTHOR      "Tyl569"
#define PHP_STR_ZEPVERSION  "0.12.19-4345593"
#define PHP_STR_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(str)

	int initialized;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	
ZEND_END_MODULE_GLOBALS(str)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(str)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) ZEND_MODULE_GLOBALS_ACCESSOR(str, v)
#else
	#define ZEPHIR_GLOBAL(v) (str_globals.v)
#endif

#ifdef ZTS
	ZEND_TSRMLS_CACHE_EXTERN()
	#define ZEPHIR_VGLOBAL ((zend_str_globals *) (*((void ***) tsrm_get_ls_cache()))[TSRM_UNSHUFFLE_RSRC_ID(str_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(str_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def str_globals
#define zend_zephir_globals_def zend_str_globals

extern zend_module_entry str_module_entry;
#define phpext_str_ptr &str_module_entry

#endif
