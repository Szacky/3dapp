//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function poly() {
	var material = document.querySelector('Material');
	var texture = document.querySelector('ImageTexture');
	var texturePath = 'maps/mpm_vol.09_p35_steel.JPG';
	if (texture.url === texturePath) {
	  texture.url = '';
	  material.diffuseColor = '0 0 0';
	} else {
	  texture.url = texturePath;
	  material.diffuseColor = '0.588 0.588 0.588';
	}
  }

  //cola
function original() {
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_red_diff.JPG';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_red_diff.JPG';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}

function zero() {
	
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_red_zero.JPG';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_red_zero.JPG';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}

function sliver() {
	
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_light_diff.jpg';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_light_diff.jpg';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
} 
//sprite
function original1() {
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_green_diff.JPG';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_green_diff.JPG';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}

function zero1() {
	
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_green_sliver_diff.JPG';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_green_sliver_diff.JPG';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}
//fanta
function orange() {
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_orange_diff.jpg';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_orange_diff.jpg';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}

function apple() {
	
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_apple_diff.jpg';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_apple_diff.jpg';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}
function grapes() {
	
	var texturez = document.querySelector('ImageTexture');
	var texturePathz = 'maps/mpm_vol.09_p35_can_grapes_diff.jpg';
	if (texturez.url === texturePathz) {
	  texturez.url = 'maps/mpm_vol.09_p35_can_grapes_diff.jpg';
	  
	} else {
	  texturez.url = texturePathz;
	  
	}
}




function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}


function wireframe()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}


