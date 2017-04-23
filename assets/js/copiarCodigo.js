function copy (node) {
  let range = document.createRange();
  range.selectNode(node);
  window.getSelection().addRange(range);

  let support = document.execCommand('copy');
  if (support) {
    console.info('Código copiado al portapeles');
  } else {
    console.error('Tu navegador no soporta execCommand');
  }
}
