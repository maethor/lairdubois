<?php

namespace Ladb\CoreBundle\Event;

use Ladb\CoreBundle\Model\PublicationInterface;
use Symfony\Component\EventDispatcher\Event;

class PublicationsEvent extends Event {

	private $publications;
	private $needCounterResetRefreshTime;

	public function __construct($publications, $needCounterResetRefreshTime = false) {
		$this->publications = $publications;
		$this->needCounterResetRefreshTime = $needCounterResetRefreshTime;
	}

	// Publications /////

	public function getPublications() {
		return $this->publications;
	}

	// NeedCounterResetRefreshTime /////

	public function isNeedCounterResetRefreshTime() {
		return $this->needCounterResetRefreshTime;
	}

}
