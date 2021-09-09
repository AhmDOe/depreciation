<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Decpreciations</title>
	<script src="/script.js"></script>
	
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<nav>
		<span class="logo">Depreciation Calculator</span>
		<ul class="nav__links">
			<li class="links__items">About</li>
		</ul>
	</nav>
	
	<div class="container depreciations">
		<div class="depreciations__card">
			<div class="toolbar">Straight-Line Depreciation Method</div>
			<div class="content">
				<form onsubmit='handleSubmit(event)'>
					<legend>Depreciation per year = (AssetCost - SalvageCost)/UsefulLife</legend>
					<fieldset>
						<div class="form__group">
							<label for="sl_asset_cost">AssetCost</label>
							<input type="number" name="sl_asset_cost" value="80000"/>
						</div>
						<div class="form__group">
							<label for="sl_salvage_cost">SalvageCost</label>
							<input type="number" name="sl_salvage_cost" value="3000"/>
						</div>
						<div class="form__group">
							<label for="sl_useful_life">UsefulLife</label>
							<input type="number" name="sl_useful_life" value="13"/>
						</div>
						
						<div class="form_actions">
							<button type="submit"  name="btn_calculate" >Calculate</button>
							<!-- <input type="number" readonly="true" placeholder="results" id="calculateSLD" /> -->
							<button class="upload" name="btn_save" onclick='saveDepreciations(calculated_results,"backedn_url")'>Save</button>
						</div>
					</fieldset>
				</form>
			</div>
			
			<ul class="depreciations__results">
				<h2>Depreciations</h2>
			</ul>
		</div>
	</div>
	
	<script>
		let calculated_results = null
		function handleSubmit(event){
			event.preventDefault()
			try {
				
				let {sl_useful_life, sl_salvage_cost, sl_asset_cost} = event.target.elements
				
				const depreciation_const = (parseInt( sl_asset_cost.value) - parseInt( sl_salvage_cost.value)) / parseFloat( sl_useful_life.value)
				let value_over_years = get_depreciation_for_years(parseInt( sl_asset_cost.value), depreciation_const, parseInt( sl_useful_life.value))
				calculated_results = value_over_years //save the deprciations into external variable
				console.log({value_over_years})
				renderDepreciation(value_over_years)
				
			}catch(err){
				alert('invalid values entered, check and try again')
				
			}
		}
		
		function get_depreciation_for_years(sl_asset_cost, depreciation_const, sl_useful_life){
			
			return new Array(sl_useful_life).fill(null).map((value,index) => sl_asset_cost - ((index +1) * depreciation_const))
		}
		
		function renderDepreciation(depreciations){
			let dep_results = document.querySelector('.depreciations__results')
			depreciations.forEach( (value, index )=> {
				let li = document.createElement('li');
				li.innerHTML = `<span class="dep__year">Year	${index +1} </span><span class="dep__value">	GHC${value.toFixed(2)}</span>`
				dep_results.appendChild(li)
			})
		}
		
		function saveDepreciations(deps,url_to_backend){
			if (!deps){
				alert('no depreciations available to be saved')
			}
			
			try {
				
				//make ajax call to backend using fetch/axios
				
				
				fetch(url_to_backend,{
					method: 'POST',
					body: deps,
					mode: 'cors', // no-cors, *cors, same-origin
					headers: {
						'Content-Type': 'application/json'
						// 'Content-Type': 'application/x-www-form-urlencoded',
					},
				}) 
			} catch (error) {
				alert('Saving failed, check backend log and browser console.')
				console.error(error)
			}
		}
	</script>
</body>
</html>
