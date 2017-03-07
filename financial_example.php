<?php
/**
 * Case use of financial class.
 * 
 * @version   $Id: financial_example.php,v 1.0.5 2004-06-23 09:03:56-05 egarcia Exp $
 * @author    Enrique Garcia M. <egarcia@egm.as>
 * @copyright (c) 2002-2004 EGM :: Ingenieria sin fronteras
 * @since     Saturday, November 30, 2002
 **/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

include('financial_class.php');

/***********************************************************************************/

$f = new Financial;
echo 'FV: ' . $f->FV(1.1, 1/360, 0, -100) . "\n";
echo 'PV: ' . $f->PV(1.1, 1/360, 0, -100.206306226) . "\n";
echo 'PMT: ' . $f->PMT(1.1, 1/360, -100) . "\n";
echo 'PMT: ' . $f->PMT(1.1, 1/360, 0, -100.206306226) . "\n";
echo 'NPER: ' . $f->NPER(1.1, 53428.7980679, -100) . "\n";
echo 'NPER: ' . $f->NPER(1.1, 0, -100, -100.206306226) . "\n";
echo 'FV: ' . $f->FV(0.1, 1/360, 0, -100) . "\n";
echo 'PV: ' . $f->PV(0.1, 1/360, 0, -100.026478555) . "\n";
echo 'PMT: ' . $f->PMT(0.1, 1/360, -100) . "\n";
echo 'PMT: ' . $f->PMT(0.1, 1/360, 0, -100.026478555) . "\n";
echo 'NPER: ' . $f->NPER(1.1, 37776.4114948, -100) . "\n";
echo 'NPER: ' . $f->NPER(1.1, 0, -100, -100.026478555) . "\n";
echo 'EFFECT: ' . $f->EFFECT(0.0525, 4) . "\n";
echo 'NOMINAL: ' . $f->NOMINAL(0.053543, 4) . "\n";
echo 'NPV: ' . $f->NPV(0.1, array(-10000,3000,4200,6800)) . "\n";
echo 'XNPV: ' . $f->XNPV(0.09, array(-10000,2750,4250,3250,2750), array(
	mktime(0,0,0,1,1,2008),
	mktime(0,0,0,3,1,2008),
	mktime(0,0,0,10,30,2008),
	mktime(0,0,0,2,15,2009),
	mktime(0,0,0,4,1,2009),
	)) . "\n";
echo 'XIRR: ' . $f->XIRR(array(-10000,2750,4250,3250,2750), array(
	mktime(0,0,0,1,1,2008),
	mktime(0,0,0,3,1,2008),
	mktime(0,0,0,10,30,2008),
	mktime(0,0,0,2,15,2009),
	mktime(0,0,0,4,1,2009),
	), 0.1) . "\n";
echo 'IRR: ' . $f->IRR(array(-70000,12000,15000,18000,21000)) . "\n";
echo 'DISC: ' . $f->DISC(
	mktime(0,0,0,1,25,2007),
	mktime(0,0,0,6,15,2007),
	97.975,
	100,
	0) . "\n";
echo 'DISC: ' . $f->DISC(
	mktime(0,0,0,1,25,2007),
	mktime(0,0,0,6,15,2009),
	97.975,
	100,
	1) . "\n";
echo 'DISC: ' . $f->DISC(
	mktime(0,0,0,1,25,2007),
	mktime(0,0,0,6,15,2007),
	97.975,
	100,
	2) . "\n";
echo 'DISC: ' . $f->DISC(
	mktime(0,0,0,1,25,2007),
	mktime(0,0,0,6,15,2007),
	97.975,
	100,
	3) . "\n";
echo 'DISC: ' . $f->DISC(
	mktime(0,0,0,1,25,2007),
	mktime(0,0,0,6,15,2007),
	97.975,
	100,
	4) . "\n";
echo 'INTRATE: ' . $f->INTRATE(
	mktime(0,0,0,2,15,2008),
	mktime(0,0,0,5,15,2008),
	1000000,
	1014420,
	2) . "\n";
echo 'IPMT: ' . $f->IPMT(0.1/12, 3, 3, 8000) . "\n";
echo 'IPMT: ' . $f->IPMT(0.1, 3, 3, 8000) . "\n";
echo 'RECEIVED: ' . $f->RECEIVED(
	mktime(0,0,0,2,15,2008),
	mktime(0,0,0,5,15,2008),
	1000000,
	0.0575,
	2) . "\n";
echo 'DOLLARDE: ' . $f->DOLLARDE(1.02, 16) . "\n";
echo 'DOLLARDE: ' . $f->DOLLARDE(1.1, 32) . "\n";
echo 'DOLLARFR: ' . $f->DOLLARFR(1.125, 16) . "\n";
echo 'DOLLARFR: ' . $f->DOLLARFR(1.125, 32) . "\n";
echo 'FVSCHEDULE: ' . $f->FVSCHEDULE(1, array(0.09,0.11,0.1)) . "\n";
echo 'PPMT: ' . $f->PPMT(0.1/12, 1, 2*12, 2000) . "\n";
echo 'PPMT: ' . $f->PPMT(0.08, 10, 10, 200000) . "\n";
echo 'RATE: ' . $f->RATE(4*12,-200, 8000) . "\n";
echo 'RATE: ' . $f->RATE(4*12,-200, 8000)*12 . "\n";
echo 'SYD: ' . $f->SYD(30000, 7500, 10, 10) . "\n";
echo 'SLN: ' . $f->SLN(30000, 7500, 10) . "\n";
echo 'DDB: ' . $f->DDB(1000000, 100000, 10, 4) . "\n";
echo 'DELTA: ' . $f->DELTA(5, 4) . "\n";
echo 'DELTA: ' . $f->DELTA(5, 5) . "\n";
echo 'PRICEDISC: ' . $f->PRICEDISC(mktime(0,0,0,2,16,2008), mktime(0,0,0,3,1,2008), 0.0525, 100, 2) . "\n";
echo 'YIELDDISC: ' . $f->YIELDDISC(mktime(0,0,0,2,16,2008), mktime(0,0,0,3,1,2008), 99.795, 100, 2) . "\n";
echo 'COUPNUM: ' . $f->COUPNUM(mktime(0,0,0,1,25,2007), mktime(0,0,0,11,15,2008), 2, 1) . "\n";
echo 'COUPDAYBS: ' . $f->COUPDAYBS(mktime(0,0,0,1,25,2007), mktime(0,0,0,11,17,2008), 1, 1) . "\n";
echo 'VDB: ' . $f->VDB(2400,300,10*365,0,1) . "\n";
echo 'VDB: ' . $f->VDB(2400,300,10*12,0,1) . "\n";
echo 'VDB: ' . $f->VDB(2400,300,10,0,1) . "\n";
echo 'VDB: ' . $f->VDB(2400,300,10*12,6,18) . "\n";
echo 'VDB: ' . $f->VDB(2400,300,10*12,6,18,1.5) . "\n";
echo 'VDB: ' . $f->VDB(2400,300,10,0,0.875,1.5) . "\n";
echo 'MIRR: ' . $f->MIRR(array(-120000,39000,30000,21000,37000,46000), 0.1, 0.12) . "\n";
echo 'MIRR: ' . $f->MIRR(array(-120000,39000,30000,21000), 0.1, 0.12) . "\n";
echo 'MIRR: ' . $f->MIRR(array(-120000,39000,30000,21000,37000,46000), 0.1, 0.14) . "\n";

?>