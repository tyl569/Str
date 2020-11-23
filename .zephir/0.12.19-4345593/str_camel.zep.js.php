<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Str',
    'file' => '/Users/feilong/data/service/str/str/camel.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Camel',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'convert',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'str',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/feilong/data/service/str/str/camel.zep',
              'line' => 5,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'symbol',
              'const' => 0,
              'data-type' => 'char',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/feilong/data/service/str/str/camel.zep',
              'line' => 5,
              'char' => 59,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'i',
                  'file' => '/Users/feilong/data/service/str/str/camel.zep',
                  'line' => 7,
                  'char' => 14,
                ),
              ),
              'file' => '/Users/feilong/data/service/str/str/camel.zep',
              'line' => 8,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'after',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/feilong/data/service/str/str/camel.zep',
                    'line' => 8,
                    'char' => 24,
                  ),
                  'file' => '/Users/feilong/data/service/str/str/camel.zep',
                  'line' => 8,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/feilong/data/service/str/str/camel.zep',
              'line' => 9,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'range',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                      'line' => 9,
                      'char' => 25,
                    ),
                    'file' => '/Users/feilong/data/service/str/str/camel.zep',
                    'line' => 9,
                    'char' => 25,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'strlen',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'str',
                            'file' => '/Users/feilong/data/service/str/str/camel.zep',
                            'line' => 9,
                            'char' => 37,
                          ),
                          'file' => '/Users/feilong/data/service/str/str/camel.zep',
                          'line' => 9,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                      'line' => 9,
                      'char' => 38,
                    ),
                    'file' => '/Users/feilong/data/service/str/str/camel.zep',
                    'line' => 9,
                    'char' => 38,
                  ),
                ),
                'file' => '/Users/feilong/data/service/str/str/camel.zep',
                'line' => 9,
                'char' => 40,
              ),
              'value' => 'i',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'str',
                          'file' => '/Users/feilong/data/service/str/str/camel.zep',
                          'line' => 10,
                          'char' => 20,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'i',
                          'file' => '/Users/feilong/data/service/str/str/camel.zep',
                          'line' => 10,
                          'char' => 22,
                        ),
                        'file' => '/Users/feilong/data/service/str/str/camel.zep',
                        'line' => 10,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'symbol',
                        'file' => '/Users/feilong/data/service/str/str/camel.zep',
                        'line' => 10,
                        'char' => 33,
                      ),
                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                      'line' => 10,
                      'char' => 33,
                    ),
                    'file' => '/Users/feilong/data/service/str/str/camel.zep',
                    'line' => 10,
                    'char' => 35,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'concat-assign',
                          'variable' => 'after',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'strtoupper',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'str',
                                    'file' => '/Users/feilong/data/service/str/str/camel.zep',
                                    'line' => 11,
                                    'char' => 43,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'add',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'i',
                                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                                      'line' => 11,
                                      'char' => 45,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '1',
                                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                                      'line' => 11,
                                      'char' => 47,
                                    ),
                                    'file' => '/Users/feilong/data/service/str/str/camel.zep',
                                    'line' => 11,
                                    'char' => 47,
                                  ),
                                  'file' => '/Users/feilong/data/service/str/str/camel.zep',
                                  'line' => 11,
                                  'char' => 48,
                                ),
                                'file' => '/Users/feilong/data/service/str/str/camel.zep',
                                'line' => 11,
                                'char' => 48,
                              ),
                            ),
                            'file' => '/Users/feilong/data/service/str/str/camel.zep',
                            'line' => 11,
                            'char' => 49,
                          ),
                          'file' => '/Users/feilong/data/service/str/str/camel.zep',
                          'line' => 11,
                          'char' => 49,
                        ),
                      ),
                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                      'line' => 12,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'i',
                          'expr' => 
                          array (
                            'type' => 'add',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'i',
                              'file' => '/Users/feilong/data/service/str/str/camel.zep',
                              'line' => 12,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '1',
                              'file' => '/Users/feilong/data/service/str/str/camel.zep',
                              'line' => 12,
                              'char' => 28,
                            ),
                            'file' => '/Users/feilong/data/service/str/str/camel.zep',
                            'line' => 12,
                            'char' => 28,
                          ),
                          'file' => '/Users/feilong/data/service/str/str/camel.zep',
                          'line' => 12,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                      'line' => 13,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'concat-assign',
                          'variable' => 'after',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'str',
                              'file' => '/Users/feilong/data/service/str/str/camel.zep',
                              'line' => 14,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'i',
                              'file' => '/Users/feilong/data/service/str/str/camel.zep',
                              'line' => 14,
                              'char' => 34,
                            ),
                            'file' => '/Users/feilong/data/service/str/str/camel.zep',
                            'line' => 14,
                            'char' => 35,
                          ),
                          'file' => '/Users/feilong/data/service/str/str/camel.zep',
                          'line' => 14,
                          'char' => 35,
                        ),
                      ),
                      'file' => '/Users/feilong/data/service/str/str/camel.zep',
                      'line' => 15,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/feilong/data/service/str/str/camel.zep',
                  'line' => 16,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/feilong/data/service/str/str/camel.zep',
              'line' => 17,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'after',
                'file' => '/Users/feilong/data/service/str/str/camel.zep',
                'line' => 17,
                'char' => 21,
              ),
              'file' => '/Users/feilong/data/service/str/str/camel.zep',
              'line' => 18,
              'char' => 5,
            ),
          ),
          'file' => '/Users/feilong/data/service/str/str/camel.zep',
          'line' => 5,
          'last-line' => 19,
          'char' => 26,
        ),
      ),
      'file' => '/Users/feilong/data/service/str/str/camel.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/feilong/data/service/str/str/camel.zep',
    'line' => 3,
    'char' => 5,
  ),
);