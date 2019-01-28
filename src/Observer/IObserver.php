<?php

interface IObserver
{
  public function onChanged($sender, $args);
}