# 🚀 Proyecto Web: CMS, DMS e ISN

Bienvenido al repositorio principal de nuestro proyecto. Este documento contiene todas las reglas, roles y pasos necesarios para trabajar en equipo sin romper el código de los demás.

## 📋 Descripción del Proyecto
Este proyecto se divide en tres grandes entregables iterativos utilizando la metodología Scrum:
1. **CMS (Content Management System):** Página web corporativa en WordPress.
2. **DMS (Document Management System):** Sistema de gestión de archivos.
3. **ISN (Internal Social Network):** Red social interna para la empresa.

---

## 👥 Roles del Equipo (Scrum)
Para organizarnos correctamente, nos dividiremos las responsabilidades de la siguiente manera:

*   **👑 Product Owner / QA:** Se asegura de que el proyecto cumple con los requisitos del profesor. Es el guardián de la calidad: revisa y aprueba los *Pull Requests* antes de que el código se fusione.
*   **🛠️ Scrum Master / DevOps:** Vigila que el tablero de GitHub Projects esté actualizado (Burndown chart). Se encarga de resolver bloqueos del equipo, gestionar el repositorio, fusionar las ramas principales y desplegar el proyecto en el servidor REMUS.
*   **💻 Desarrolladores:** Cogen tareas del tablero (*Sprint Backlog*), programan las funcionalidades en sus ramas individuales y suben el código para su revisión.

---

## ⚙️ Entorno de Trabajo (Prerrequisitos)
Antes de tocar el código, debes tener instalado **exactamente** esto en tu ordenador:

1.  **[WampServer](https://www.wampserver.com/):** Nuestro servidor local (Apache, PHP, MySQL).
2.  **[Git](https://git-scm.com/):** El motor de control de versiones.
3.  **[Visual Studio Code (VS Code)](https://code.visualstudio.com/):** Nuestro editor de código.
4.  **Extensiones de VS Code obligatorias:**
    *   *GitLens:* Para ver quién hizo cada cambio y gestionar Git visualmente.
    *   *PHP Intelephense:* Para autocompletado de código.

---

## 🚀 Cómo empezar (Instalación Local)
Solo debes hacer esto la primera vez que entras al proyecto:

1.  Abre la carpeta `C:\wamp64\www\` en tu ordenador.
2.  Abre la terminal en esa carpeta y clona este repositorio:
    ```bash
    git clone <URL-DEL-REPOSITORIO>
    ```
3.  Copia el archivo de configuración `wp-config-sample.php`, renómbralo a `wp-config.php` y pon los datos de tu base de datos local (usuario `root`, sin contraseña). *(Nota: este archivo no se subirá a GitHub gracias al .gitignore).*
4.  Arranca WampServer y asegúrate de que el icono está verde.

---

## 🔄 Flujo de Trabajo Diario (El Paso a Paso)

Usaremos el panel de **Control de Código Fuente (Source Control)** y **GitLens** integrados en VS Code para no tener que usar comandos de terminal.

### 1. Sincronizar (Por la mañana)
*Antes de empezar a programar, siempre debes bajarte lo de tus compañeros.*
1. En VS Code, abajo a la izquierda, asegúrate de estar en la rama `develop`.
2. Haz clic en el icono de **Sincronizar Cambios (Sync Changes)** (o haz Pull desde el menú de GitLens) para descargar el código nuevo.

### 2. Crear tu Rama de Trabajo (Feature Branch)
*Nunca programes en `main` o `develop`.*
1. En VS Code, haz clic en el nombre de la rama abajo a la izquierda (donde dice `develop`).
2. Selecciona **+ Create new branch...** (Crear nueva rama).
3. Escribe el nombre siguiendo el estándar: `feature/nombre-de-tu-tarea` (ej. `feature/login-usuarios`) y pulsa Enter.

### 3. Desarrollar y hacer Commits (Puntos de guardado)
1. Escribe tu código normalmente y guarda los archivos (`Ctrl+S`).
2. Ve al panel lateral de **Source Control** (el icono de ramificación de Git).
3. Verás los archivos modificados. Haz clic en el símbolo **"+"** al lado de cada archivo para prepararlos (*Stage changes*).
4. En la caja de texto superior, escribe qué has hecho (ej. `feat: añadido botón de login`).
5. Haz clic en el botón azul **Commit**.

### 4. Subir a GitHub (Publish / Push)
1. Una vez hecho el commit, haz clic en el botón azul que dice **Publish Branch** (si es la primera vez) o **Sync Changes** (si ya la habías subido antes).
2. Tu código ya está en GitHub en tu rama.

### 5. Abrir el Pull Request (PR)
1. Ve a GitHub.com y entra al repositorio.
2. Verás un cartel verde que dice *Compare & pull request* para tu rama. Haz clic.
3. Asegúrate de que estás comparando tu rama `feature/...` contra `develop`.
4. Avisa por Discord en el canal `#github-log` o a tu QA de que tu PR está listo para revisión.
5. ¡Mueve tu tarjeta en **GitHub Projects** a la columna *In Review*!
