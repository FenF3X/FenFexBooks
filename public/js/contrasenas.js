import './bootstrap';
import bcrypt from 'bcryptjs';

document.addEventListener('DOMContentLoaded', () => {
  const input = document.getElementById('verontrasena');

  if (!input) return;

  let temporizador;
  const saltRounds = 10;

  input.addEventListener('input', () => {
    clearTimeout(temporizador);
    temporizador = setTimeout(() => {
      const texto = input.value;
      if (texto.trim() !== "") {
        const salt = bcrypt.genSaltSync(saltRounds);
        const hash = bcrypt.hashSync(texto, salt);
        input.value = hash;
      }
    }, 2000);
  });
});
