<?php 

function translate($v)
{
	return LangPeer::getText($v);
}