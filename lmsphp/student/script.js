const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})

const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

navLinkEls.forEach(navLinkEls => {
    const navLinkPathname = new URL(navLinkEls).pathname;

    if ((windowPathname === navLinkPathname) || (windowPathname === '/lms project/dashboard.html' && navLinkPathname === '/')){
        navLinkEls.classList.add('active');
    }
});
/** login */
const showLoginFormButton = document.getElementById('show-login-form');
    const loginContainer = document.getElementById('login-container');
    const closeButton = document.getElementById('close-button');

    showLoginFormButton.addEventListener('click', () => {
        loginContainer.style.display = 'block';
    });

    closeButton.addEventListener('click', () => {
        loginContainer.style.display = 'none';
    });
	/*text editor*/
	function formatDoc(cmd, value=null) {
		if(value) {
			document.execCommand(cmd, false, value);
		} else {
			document.execCommand(cmd);
		}
	}
	
	function addLink() {
		const url = prompt('Insert url');
		formatDoc('createLink', url);
	}
	
	
	
	
	const content1 = document.getElementById('content1');
	
	content1.addEventListener('mouseenter', function () {
		const a = content1.querySelectorAll('a');
		a.forEach(item=> {
			item.addEventListener('mouseenter', function () {
				content1.setAttribute('contenteditable', false);
				item.target = '_blank';
			})
			item.addEventListener('mouseleave', function () {
				content1.setAttribute('contenteditable', true);
			})
		})
	})
	
	
	const showCode = document.getElementById('show-code');
	let active = false;
	
	showCode.addEventListener('click', function () {
		showCode.dataset.active = !active;
		active = !active
		if(active) {
			content1.textContent1 = content1.innerHTML;
			content1.setAttribute('contenteditable', false);
		} else {
			content1.innerHTML = content1.textContent1;
			content1.setAttribute('contenteditable', true);
		}
	})
	
	
	
	const filename = document.getElementById('filename');
	
	function fileHandle(value) {
		if(value === 'new') {
			content1.innerHTML = '';
			filename.value = 'untitled';
		} else if(value === 'txt') {
			const blob = new Blob([content1.innerText])
			const url = URL.createObjectURL(blob)
			const link = document.createElement('a');
			link.href = url;
			link.download = `${filename.value}.txt`;
			link.click();
		} else if(value === 'pdf') {
			html2pdf(content1).save(filename.value);
		}
	}
	/** notification dropdown */
	var box  = document.getElementById('box');
    var down = false;


function toggleNotifi(){
	if (down) {
		box.style.height  = '0px';
		box.style.opacity = 0;
		down = false;
	}else {
		box.style.height  = '510px';
		box.style.opacity = 1;
		down = true;
	}
} 

/**cat box */
// MESSAGE INPUT
const contenttextarea = document.querySelector('#content .chatbox-message-input')
const contentchatboxForm = document.querySelector('#content .chatbox-message-form')

contenttextarea.addEventListener('input', function () {
	let line = contenttextarea.value.split('\n').length

	if(contenttextarea.rows < 6 || line < 6) {
		contenttextarea.rows = line
	}

	if(contenttextarea.rows > 1) {
		contentchatboxForm.style.alignItems = 'flex-end'
	} else {
		contentchatboxForm.style.alignItems = 'center'
	}
})

/* ACCORDION */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

/* DELETE CHECKBOX FUNCTION */

function removeCheckedCheckboxes() {
  var checked = document.querySelectorAll(".delete-checkbox:checked");
  checked.forEach((elem) => {
    elem.parentElement.style.display = "none";
  })
}

function selects(){  
  var ele=document.getElementsByName('chk');  
  for(var i=0; i<ele.length; i++){  
      if(ele[i].type=='checkbox')  
          ele[i].checked=true;  
  }  
}  
function deSelect(){  
  var ele=document.getElementsByName('chk');  
  for(var i=0; i<ele.length; i++){  
      if(ele[i].type=='checkbox')  
          ele[i].checked=false;  
        
  }  
}      

	/* ///////////////////////////////////////////////////////// USERS */
/* ACCORDION */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

/* DELETE CHECKBOX FUNCTION */

function removeCheckedCheckboxes() {
  var checked = document.querySelectorAll(".delete-checkbox:checked");
  checked.forEach((elem) => {
    elem.parentElement.style.display = "none";
  })
}

function selects(){  
  var ele=document.getElementsByName('chk');  
  for(var i=0; i<ele.length; i++){  
      if(ele[i].type=='checkbox')  
          ele[i].checked=true;  
  }  
}  
function deSelect(){  
  var ele=document.getElementsByName('chk');  
  for(var i=0; i<ele.length; i++){  
      if(ele[i].type=='checkbox')  
          ele[i].checked=false;  
        
  }  
}      
	/* ///////////////////////////////////////////////////////// USERS */
