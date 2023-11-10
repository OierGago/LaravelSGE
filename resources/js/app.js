import './bootstrap';
(() => {
    'use strict';

    const getStoredTheme = () => localStorage.getItem('theme');
    const setStoredTheme = theme => localStorage.setItem('theme', theme);

    const getPreferredTheme = () => {
      const storedTheme = getStoredTheme();
      if (storedTheme) {
        return storedTheme;
      }

      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    };

    const setTheme = theme => {
      if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
      } else {
        document.documentElement.setAttribute('data-bs-theme', theme);
      }
    };

    const showActiveTheme = (theme, focus = false) => {
      // ... (código existente para mostrar el tema activo)
    };

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
      const storedTheme = getStoredTheme();
      if (storedTheme !== 'light' && storedTheme !== 'dark') {
        setTheme(getPreferredTheme());
      }
    });

    window.addEventListener('DOMContentLoaded', () => {
      showActiveTheme(getPreferredTheme());

      document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value');
          setStoredTheme(theme);
          setTheme(theme);
          showActiveTheme(theme, true);
        });
      });

      // Agregar un evento click para el botón de cambio de tema
      const themeToggleBtn = document.getElementById('theme-toggle');
      if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
          const currentTheme = getStoredTheme() || getPreferredTheme();
          const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
          setStoredTheme(newTheme);
          setTheme(newTheme);
          showActiveTheme(newTheme, true);
        });
      }
    });

    // Cargar y aplicar el tema guardado al cargar la página
    const savedTheme = getStoredTheme();
    if (savedTheme) {
      setTheme(savedTheme);
      showActiveTheme(savedTheme);
    }
  })();
