<?php
/**
*	xpdo -- eXtended PDO
*	Copyright (c) 2022 Marcin Laber, https://laber.pl
*/

class xPDO extends \PDO
{
	public function pquery (string $sql, ...$args): \PDOStatement
	{
		($s = $this->prepare($sql))->execute($args);
		return $s;
	}
	
	public function get_col (string $sql, ...$args)
	{
		return array_column((!empty($args) ? $this->pquery($sql, ...$args) : $this->query($sql))->fetchAll(\PDO::FETCH_NUM) ?? [], 0);
	}
	
	public function get_row (string $sql, ...$args)
	{
		return (!empty($args) ? $this->pquery($sql, ...$args) : $this->query($sql))->fetch(\PDO::FETCH_ASSOC) ?? false;
	}
	
	public function get_array (string $sql, ...$args)
	{
		return (!empty($args) ? $this->pquery($sql, ...$args) : $this->query($sql))->fetchAll(\PDO::FETCH_ASSOC) ?? false;
	}
	
	public function get_field (string $sql, ...$args)
	{
		return (!empty($args) ? $this->pquery($sql, ...$args) : $this->query($sql))->fetch(\PDO::FETCH_NUM)[0] ?? false;
	}
}