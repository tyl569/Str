[
    {
        "type": "namespace",
        "name": "Str",
        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Camel",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "convert",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "str",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                            "line": 5,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "symbol",
                            "const": 0,
                            "data-type": "char",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                            "line": 5,
                            "char": 59
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "i",
                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                    "line": 7,
                                    "char": 14
                                }
                            ],
                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                            "line": 8,
                            "char": 14
                        },
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "after",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                        "line": 8,
                                        "char": 24
                                    },
                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                    "line": 8,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                            "line": 9,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "fcall",
                                "name": "range",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                            "line": 9,
                                            "char": 25
                                        },
                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                        "line": 9,
                                        "char": 25
                                    },
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "strlen",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "str",
                                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                        "line": 9,
                                                        "char": 37
                                                    },
                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                    "line": 9,
                                                    "char": 37
                                                }
                                            ],
                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                            "line": 9,
                                            "char": 38
                                        },
                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                        "line": 9,
                                        "char": 38
                                    }
                                ],
                                "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                "line": 9,
                                "char": 40
                            },
                            "value": "i",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "str",
                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                    "line": 10,
                                                    "char": 20
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "i",
                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                    "line": 10,
                                                    "char": 22
                                                },
                                                "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                "line": 10,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "symbol",
                                                "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                "line": 10,
                                                "char": 33
                                            },
                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                            "line": 10,
                                            "char": 33
                                        },
                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                        "line": 10,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "concat-assign",
                                                    "variable": "after",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "strtoupper",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "str",
                                                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                                        "line": 11,
                                                                        "char": 43
                                                                    },
                                                                    "right": {
                                                                        "type": "add",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "i",
                                                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                                            "line": 11,
                                                                            "char": 45
                                                                        },
                                                                        "right": {
                                                                            "type": "int",
                                                                            "value": "1",
                                                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                                            "line": 11,
                                                                            "char": 47
                                                                        },
                                                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                                        "line": 11,
                                                                        "char": 47
                                                                    },
                                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                                    "line": 11,
                                                                    "char": 48
                                                                },
                                                                "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                                "line": 11,
                                                                "char": 48
                                                            }
                                                        ],
                                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                        "line": 11,
                                                        "char": 49
                                                    },
                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                    "line": 11,
                                                    "char": 49
                                                }
                                            ],
                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                            "line": 12,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "i",
                                                    "expr": {
                                                        "type": "add",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "i",
                                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                            "line": 12,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "int",
                                                            "value": "1",
                                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                            "line": 12,
                                                            "char": 28
                                                        },
                                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                        "line": 12,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                    "line": 12,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                            "line": 13,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "concat-assign",
                                                    "variable": "after",
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "str",
                                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                            "line": 14,
                                                            "char": 32
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "i",
                                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                            "line": 14,
                                                            "char": 34
                                                        },
                                                        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                        "line": 14,
                                                        "char": 35
                                                    },
                                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                                    "line": 14,
                                                    "char": 35
                                                }
                                            ],
                                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                            "line": 15,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                    "line": 16,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                            "line": 17,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "after",
                                "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                                "line": 17,
                                "char": 21
                            },
                            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                            "line": 18,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
                    "line": 5,
                    "last-line": 19,
                    "char": 26
                }
            ],
            "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/feilong\/data\/service\/str\/str\/camel.zep",
        "line": 3,
        "char": 5
    }
]