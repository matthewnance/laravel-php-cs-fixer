<?php

return [
    'rules' => [
        'psr0' => false,
        '@PSR2' => true,
        'align_multiline_comment' => [
            'comment_type' => 'phpdocs_like'
        ],
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'array_indentation' => true,
        'binary_operator_spaces' => [
            'operators' => [
                "=" => "align_single_space_minimal",
                "===" => "align_single_space_minimal",
                "xor" => null
            ]
        ],
        'blank_line_after_namespace' => true,
        'braces' => [
            'allow_single_line_closure' => true
        ],
        'cast_spaces' => [
            'space' => 'single'
        ],
        'class_attributes_separation' => [
            'elements' => ["const", "method", "property"],
        ],
        'class_definition' => [
            'multi_line_extends_each_single_line' => false,
            'single_item_single_line' => true
        ],
        'class_keyword_remove' => false,
        'combine_consecutive_issets' => false,
        'combine_consecutive_unsets' => false,
        'concat_space' => [
            'spacing' => 'one'
        ],
        'declare_equal_normalize' => [
            'space' => 'single'
        ],
        'elseif' => true,
        'encoding' => true,
        'explicit_string_variable' => true,
        'full_opening_tag' => true,
        'function_declaration' => ['closure_function_spacing' => 'none'],
        'function_typehint_space' => true,
        'include' => true,
        'increment_style' => ['style' => 'post'],
        'indentation_type' => true,
        'line_ending' => true,
        'lowercase_constants' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => false,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'method_argument_space' => [
            'ensure_fully_multiline' => true,
        ],
        'method_chaining_indentation' => true,
        'method_separation' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls'
        ],
        'native_function_casing' => true,
        'native_function_invocation' => true,
        'new_with_braces' => true,
        'no_alternative_syntax' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_break_comment' => true,
        'no_closing_tag' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'continue', 'curly_brace_block', 'extra', 'parenthesis_brace_block', 'return', 'square_brace_block', 'throw', 'use', 'use_trait', 'switch', 'case', 'default'
            ]
        ],
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_after_function_name' => true,
        'no_spaces_around_offset' => true,
        'no_spaces_inside_parenthesis' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_trailing_whitespace' => true,
        'no_trailing_whitespace_in_comment' => true,
        'no_unused_imports' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => true,
        'phpdoc_indent' => true,
        'phpdoc_order' => true,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => true,
        'psr4' => true,
        'semicolon_after_instruction' => true,
        'short_scalar_cast' => true,
        'single_blank_line_at_eof' => true,
        'single_blank_line_before_namespace' => true,
        'single_class_element_per_statement' => true,
        'single_import_per_statement' => true,
        'single_line_after_imports' => true,
        'switch_case_semicolon_to_colon' => true,
        'single_line_comment_style' => true,
        'standardize_not_equals' => true,
        'switch_case_space' => true,
        'visibility_required' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true
    ]
];
