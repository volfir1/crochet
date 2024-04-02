<script>
    const sidebar = document.getElementById('sidebar');
const toggleButton = document.getElementById('sidebar-toggle');
const mainContent = document.getElementById('main-content');

toggleButton.addEventListener('click', () => {
  sidebar.classList.toggle('active');
  mainContent.classList.toggle('active');
});

</script>