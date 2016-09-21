<?php
       /*
     	* In 2016:
     	* ----------------------
     	* U9    2008+
     	* U12   2005, 2006, 2007
     	* U15   2002, 2003, 2004
     	* U18   1999, 2000, 2001
     	* U21   1996, 1997, 1998
     	* M/F   -1996
     	*/

	$ageClassIndexMap = [ null, "U9", "U12", "U15", "U18", "U21", "M/F" ];

	function getAgeClassOf($yearOfBirth) {
		global $ageClassIndexMap;
		$ageIndex = floor((date("Y") - $yearOfBirth) / 3) - 1; // ab PHP 7 auch intdiv()

		return $ageIndex >= 0 ? $ageClassIndexMap[min($ageIndex, count($ageClassIndexMap))] : null;
	}

	// --------------------------------- Test ---------------------------------
	for ($year = 2016; $year >= 1993; --$year) {
		$ageClass = getAgeClassOf($year);
		echo "Year of birth {$year} equals DJB age class {$ageClass}.\n";
	}
?>
