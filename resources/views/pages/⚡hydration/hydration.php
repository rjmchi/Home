<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::guest')]  class extends Component
{
	public $starter;
	public $flour;
	public $water;
	public $hydrationPercent=0;
	public $starterPercent=0;
	public $totalFlour=0;
	public $totalWater=0;
	
	public function save() {
		$this->totalFlour = $this->flour+ $this->starter/2;
		$this->totalWater = $this->water+ $this->starter/2;
		$this->hydrationPercent=$this->totalWater/$this->totalFlour * 100;
		$this->starterPercent = $this->starter/$this->flour *100;
	}
};
