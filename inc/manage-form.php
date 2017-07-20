
<form name="dfform" action="https://myhomeleasing.localhomesearch.net/idx/" target="_new">
<input type="hidden" name="op" value="query">
<input type="hidden" name="stype" value="area">
<input type="hidden" name="_srf" value="1">

<div class="form-col">

Property Type:<br/><select name="proptype">
<option value="rnt">Rentals</option>
</select>
	<br/>



<script type="text/javascript">
if (typeof jQuery == 'undefined') {
    document.write('<scr' + 'ipt type="text/javascript" src="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery-min.js"></scr' + 'ipt>');
} else {
// nothing
}
</script>
  <script src="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.min.j…" type="text/javascript"></script>
  <link href="http://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
  <script src="http://img.davisfarrell.com/js/localdata.js" type="text/javascript"></script>
  <script src="http://img.davisfarrell.com/js/autosub_so.js" type="text/javascript"></script>

		Area:<br/><select name="area">
<option value="">Choose an area</option>
<option value="1"> N Mecklenburg
<option value="2"> NE Mecklenburg
<option value="3"> E Mecklenburg
<option value="4"> SE Mecklenburg
<option value="sc"> S Mecklenburg
<option value="7"> SW Mecklenburg
<option value="8"> W Mecklenburg
<option value="9"> NW Mecklenburg
<option value="99"> Uptown Charlotte
<option value="13"> Lake Norman
<option value="15"> Lake Wylie
<option value="42"> Mtn. Island Lake
<option value="10"> Union County
<option value="11"> Cabarrus County
<option value="12"> Iredell County
<option value="14"> Lincoln County
<option value="16"> Gaston County
<option value="17"> York County
<option value="24"> Lancaster County
<option value="35"> Chester County
<option value="">-----</option>
<option value="20"> Alexander County
<option value="44"> Alleghany County
<option value="25"> Anson County
<option value="40"> Ashe County
<option value="38"> Avery County
<option value="27"> Burke County
<option value="26"> Caldwell County
<option value="29"> Catawba County
<option value="36"> Chesterfield County
<option value="22"> Cleveland County
<option value="28"> Davidson County
<option value="31"> Davie County
<option value="51"> Forsyth County
<option value="50"> McDowell County
<option value="49"> Mitchell County
<option value="30"> Montgomery County
<option value="33"> Moore County
<option value="47"> Polk County
<option value="34"> Randolph County
<option value="32"> Richmond County
<option value="46"> Rockingham County
<option value="21"> Rowan County
<option value="45"> Rutherford County
<option value="23"> Stanly County
<option value="41"> Surry County
<option value="43"> Watauga County
<option value="39"> Wilkes County
<option value="37"> Yadkin County
<option value="48"> Yancey County
</select><br/>
</div><!-- form col -->

<div class="form-col">
	Subdivision/Complex:<br/> 
	<input type="text" id="suggest1" name="subdivision" size="35" value=""/><br/>


	City : <br/>
	<input type="text" size="15" name="city"><br/>

	Zip: <br/>
	<input type="text" name="zip" size="5" maxlength="5"><br/>
</div><!-- form col -->

<div class="form-col">
Beds: <br/>
<select name="beds">
<option value="">any</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
<option value="5">5+</option>
</select><br/>

Baths: <br/>
<select name="baths">
<option value="">any</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
</select><br/>

Min. Price:<br/>
<select name="price_min">
<option value="">none</option>
<option value="100000">$100,000
<option value="150000">$150,000
<option value="200000">$200,000
<option value="250000">$250,000
<option value="300000">$300,000
<option value="350000">$350,000
<option value="400000">$400,000
<option value="450000">$450,000
<option value="500000">$500,000
<option value="600000">$600,000
<option value="700000">$700,000
<option value="800000">$800,000
<option value="900000">$900,000
<option value="1000000">$1,000,000
</select><br/>

Max Price:<br/>
<select name="price_max">
<option value="">none</option>
<option value="100000">$100,000
<option value="150000">$150,000
<option value="200000">$200,000
<option value="250000">$250,000
<option value="300000">$300,000
<option value="350000">$350,000
<option value="400000">$400,000
<option value="450000">$450,000
<option value="500000">$500,000
<option value="600000">$600,000
<option value="700000">$700,000
<option value="800000">$800,000
<option value="900000">$900,000
<option value="1000000">$1,000,000
</select><br/>
</div><!-- form col -->


<div class="form-col">
MLS #: <br/>
<input type="text" name="mls" size="10" maxlength="15"><br/>

Street name: <br/>
<input type="text" name="street" size="15"><br/>
</div><!-- form col -->


<div class="form-col">
Features:<br />
	<div class="form-rad-wrap">
		<input type="checkbox" name="has_basement" value="1"><label class="form-rad">Basement</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="has_fireplace" value="1"><label class="form-rad">Fireplace</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="has_garage" value="1"><label class="form-rad">Garage</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="has_golf" value="1"><label class="form-rad">Golf</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="has_master_down" value="1"><label class="form-rad">Master Downstairs</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="new_construction" value="1"><label class="form-rad">New Construction</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="has_pool" value="1" ><label class="form-rad">Pool</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="is_waterfront" value="1"><label class="form-rad">Waterfront Property</label>
	</div><!-- form rad wrap -->
	<div class="form-rad-wrap">
		<input type="checkbox" name="is_waterview" value="1"><label class="form-rad">Water view</label>
	</div><!-- form rad wrap -->
</div><!-- form col -->
<!-- <div class="clear"></div> -->

<div class="submit-col"><input class="right qs-sub" type="submit" value="Search"></div>

</form>


