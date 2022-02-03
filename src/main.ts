import './style.css'

document.addEventListener('DOMContentLoaded', main)

function main() {
  setTimeout(() => {
    const input = document.querySelector('.digits')?.querySelector('input')
    
    if (input) {
      input.setAttribute('inputmode', 'tel')
    }
  }, 3000)
}
