<?php
/**
 * StoreToMega extension for the phpBB >=3.2.0 Forum Software package.
 * @copyright (c) 2017 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 */

namespace Picaron\StoreToMega\controller;

class main
{
    /** @var \Picaron\StoreToMega\core\storetomega_input_upload */
    protected $storetomega_input_upload;

    /** @var \phpbb\user */
    protected $user;

    /** @var \phpbb\request\request */
    protected $request;


    /**
    * Constructor
    *
    * @var \Picaron\StoreToMega\core\storetomega_input_upload
    * @param \phpbb\user                                        $user
    * @param \phpbb\request\request                             $request
    *
    */
    public function __construct(
        \Picaron\StoreToMega\core\storetomega_input_upload $storetomega_input_upload,
        \phpbb\user $user,
        \phpbb\request\request $request
    )
    {
        $this->storetomega_input_upload     = $storetomega_input_upload;
        $this->user                         = $user;
        $this->request                      = $request;
    }

    public function handle_storetomega()
    {
        $mode = $this->request->variable('mode', '');

        if (!$mode)
        {
            trigger_error('LINK_ADD_ERROR');
        }

        switch ($mode)
        {
            case 'upload':
                $this->storetomega_input_upload->main();
            break;
        }
    }
}
?>