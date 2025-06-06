export const API_BASE = 'http://localhost/AplicacionLibreria/backend/api.php?endpoint=';

export const API_ENDPOINTS = {
  _LISTAR_LIBROS_: `${API_BASE}libros`,
  _AGREGAR_LIBRO_: `${API_BASE}agregar`,     // si haces post.php
  _EDITAR_LIBRO_: `${API_BASE}editar`,       // si haces put.php
  _BORRAR_LIBRO_: `${API_BASE}borrar`,       // si haces delete.php
  _VER_MENU_: `${API_BASE}menu`        
};
