<script language="javascript">
function setbackground()
{window.setTimeout('setbackground()'.5000);
var index=Math.round(math.random()*9);
var colorvalue="ffffff";
default color-white(index=0)
if (index==1)
	colorvalue="ffccccc";
if (index==2)
	colorvalue="ccafff";
if (index==3)
	colorvalue="a6beff";
if (index==4)
	colorvalue="99ffff";
if (index==5)
	colorvalue="d5ccbb";
if (index==6)
	colorvalue="99ff99";
if (index==7)
	colorvalue="ffffff";
if (index==8)
	colorvalue="ffcc99";
if (index==9)
	colorvalue="ccccccc";
document.getElementByTagName("body")[0].style.backgroundColor="#"+colorvalue;
}