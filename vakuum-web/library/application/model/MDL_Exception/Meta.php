<?php
/**
 * Exception Package
 *
 * @author BYVoid
 */
class MDL_Exception_Meta extends MDL_Exception
{
	const FIELD_META = "meta";
	const INVALID_WRITE_ACTION = "invalid_write_action";
	
	public function __construct($message)
	{
		$this->desc[self::FIELD_META] = $message;
		parent :: __construct(self::FIELD_META);
	}
}