// Basic



// With Tooltip

  var quill = new Quill('#quill-tooltip', {
    modules: {
      toolbar: '#toolbar-container'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });
  
  // Enable all tooltips
  var bsTooltip = document.querySelectorAll('[data-toggle="tooltip"]')
  for (let index = 0; index < bsTooltip.length; index++) {
      var tooltip = new bootstrap.Tooltip(bsTooltip[index])
  }