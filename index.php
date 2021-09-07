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
					<form method="POST" action="f.php">
						<legend>Depreciation per year = (AssetCost - SalvageCost)/UsefulLife</legend>
						<fieldset>
							<div class="form__group">
								<label for="sl_asset_cost">AssetCost</label>
								<input type="number" name="sl_asset_cost" />
							</div>
							<div class="form__group">
								<label for="sl_salvage_cost">SalvageCost</label>
								<input type="number" name="sl_salvage_cost" />
							</div>
							<div class="form__group">
								<label for="sl_useful_life">UsefulLife</label>
								<input type="number" name="sl_useful_life" />
							</div>

							<div class="form_actions">
								<button type="submit"  name="btn_calculate" >Calculate</button>
								<!-- <input type="number" readonly="true" placeholder="results" id="calculateSLD" /> -->
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
