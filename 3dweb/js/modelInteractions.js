var spinning = false;




// Sets the active cameras for the model view
function cameraFront()
{
	document.getElementById('model__camFront').setAttribute('bind', 'true');
}
function cameraTop()
{
	document.getElementById('model__camTop').setAttribute('bind', 'true');
}
function cameraBottom()
{
	document.getElementById('model__camBotton').setAttribute('bind', 'true');
}
function cameraBack()
{
	document.getElementById('model__camBack').setAttribute('bind', 'true');
}


// Starts rotation animation
function spin()
{
	spinning = !spinning;
	document.getElementById('model__CanTimer').setAttribute('enabled', spinning.toString());
}


// Stops rotation animation
function stopRotation()
{
	spinning = false;
	document.getElementById('model__CanTimer').setAttribute('enabled', spinning.toString());
}


// Detects whether model is spinning and stops/starts it accordingly
function animateModel()
{
    if(document.getElementById('model__CanTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__CanTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__CanTimer').setAttribute('enabled', 'false');
}


// 0 - poly
// 1 - vertex
// 2 - wire 
function setRenderView(mode) {
  while(document.getElementById('model_x3d').runtime.togglePoints(true) != mode) {}
}

function showModel() {
	var model = document.querySelector('inline');
	if (model) {
	  model.render = 'true';
	}
  }
  
  function hideModel() {
	var model = document.querySelector('inline');
	if (model) {
	  model.render = 'false';
	}
  }