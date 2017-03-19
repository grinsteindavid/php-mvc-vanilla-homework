// Ajax loading animation initialize.
window.ajaxLoading = $.loading({
  //wrap div
  //set the loading html wrap tag id
  id         : 'ajaxLoading',
  //wrap tag z-index
  zIndex     : '1000',
  //wrap tag background
  background : 'rgba(0, 0, 0, 0.7)',
  //min show time
  minTime    :  250,
  //wrap tag border-radius
  radius     : '6px',
  //wrap width
  width      : '50px',
  height     : '50px',

  //loading img/gif
  imgPath    : '/css/ajax-loader.gif',
  imgWidth   : '25px',
  imgHeight  : '25px',

  //loading text
  tip        : '',
  //text font size
  fontSize   : '14px',
  //text font color
  fontColor  : '#fff'
});
