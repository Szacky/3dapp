/* 监听过渡动画结束事件 */
const intro = document.querySelector('.intro');
intro.addEventListener('animationend', () => {
  /* 隐藏过度动画 */
  intro.style.display = 'none';
  /* 显示网页正文 */
  const content = document.querySelector('.content');
  content.style.display = 'block';
});