<?php namespace Gzero\Validator;

/**
 * This file is part of the GZERO CMS package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class BaseUserValidator
 *
 * @package    Gzero\Validator
 * @author     Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @copyright  Copyright (c) 2015, Adrian Skierniewski
 */
class BaseUserValidator extends AbstractValidator {
    /**
     * @var array
     */
    protected $rules = [
        'login'    => [
            'email'    => 'required|email',
            'password' => 'required'
        ],
        'register' => [
            'email'     => 'required|email',
            'password'  => 'required',
            'firstName' => 'required',
            'lastName'  => 'required'
        ]
    ];

    /**
     * @var array
     */
    protected $filters = [
    ];
}
