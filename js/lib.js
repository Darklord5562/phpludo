function $(selector) {
  const self = {
    element: document.querySelector(selector),
    html: () => self.element,
    addClass: (cls) => self.element.classList.add(cls),
    removeClass: (cls) => self.element.classList.remove(cls),
    toggleClass: (cls) => self.element.classList.toggle(cls),
    on: (event, callback) => {
      self.element.addEventListener(event, callback)
    },
    css: (prop, val) => {
      self.element.style[prop] = [val]
    },
    hide :()=>{
      self.element.style.display = 'none'
    },
    load: (url) => {
      let xhr = new XMLHttpRequest()
      xhr.open('GET', url, true)
      xhr.send()
      xhr.onload = function() {
        var res = xhr.responseText
        self.element.innerHTML = res
      }
    }
  }
  return self
}