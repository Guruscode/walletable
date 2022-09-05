<?php

namespace Walletable\Internals\Mutation\System;

use Walletable\Internals\Mutation\AbstractNamedMutation;
use Walletable\Money\Money;

class WalletBalanceMutation extends AbstractNamedMutation
{
    /**
     * The mutation name
     *
     * @var string
     */
    protected $name;

    /**
     * Create a new named mustation
     *
     * @param string $name
     */
    public function __construct(string $name, Money $amount, array $extra)
    {
        parent::__construct($name);

        $this->value = $amount;
        $this->extra = $extra;
    }

    /**
     * Get the mutation name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}