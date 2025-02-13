
function beforeAfter() {
  // 'before_after' öğesinin genişliğini, 'before_after_slider' öğesinin değerine göre ayarlıyoruz
  document.getElementById("before_after").style.width =
    document.getElementById("before_after_slider").value + "%";
}

document.addEventListener('DOMContentLoaded', function() {
  const button = document.querySelector('button');
  if (button) {
    button.addEventListener('click', function() {
      document.querySelector('#section').scrollIntoView({ behavior: 'smooth' });
    });
  }
});