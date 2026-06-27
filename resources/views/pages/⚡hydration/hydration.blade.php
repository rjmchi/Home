<div>
	<form wire:submit="save" class="border p-4">
	
		<div class="flex flex-col md:flex-row space-x-3 p-4">
		
			<flux:input label="Starter:" wire:model="starter" />
			<flux:input label="Flour:" wire:model="flour" />
			<flux:input label="Water:" wire:model="water" />
		
		</div>
		
		<flux:button variant="primary" type="submit">Calculate</flux:button>
	</form>


	@if($hydrationPercent > 0)
	<div class="border mt-3 rounded border-teal-800 shadow p-4">
		<p>Hydration = {{$hydrationPercent}} %</p>
		<p>Starter %: {{$starterPercent}}</p>
		<p>Total Flour: {{$totalFlour}}</p>
		<p>Total Water: {{$totalWater}}</p>
	</div>
	@endif
  </div>