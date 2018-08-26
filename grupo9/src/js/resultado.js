function checkboxClear() {
  for (i = 0; i < document.selecao.elements.length; i++)
    if (document.f1.elements[i].type == "checkbox")
      document.f1.elements[i].checked = false;
}