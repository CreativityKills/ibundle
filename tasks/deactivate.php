<?php

class Ibundle_Deactivate_Task extends Task {

	public function run($arguments)
	{
		// Bundle
		$bundle = array_get($arguments, 0);

		if ( ! array_key_exists($bundle, iBundle::available(true)))
			throw new Exception("iBundle [{$bundle}] is not installed.");

		if ( ! array_key_exists($bundle, iBundle::activated()))
			throw new Exception("Bundle [{$bundle}] is not active.");

		if ( ! iBundle::deactivate($bundle))
			throw new Exception("Something went wrong while trying to deactivate iBundle.");

		echo "Deactivating iBundle [{$bundle}]... Done!";
	}

}