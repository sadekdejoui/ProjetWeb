// Sample complaints data
const reclamations = [
    { id: 1, type: "Course", description: "error in the content", statut: "New", priorite: "Normal" },
    { id: 2, type: "Professor", description: "Comportement inapproprié", statut: "urgent", priorite: "urgent" },
    { id: 3, type: "Technic", description: "Inaccessible website", statut: "urgent", priorite: "urgent" },
    { id: 4, type: "Others", description: "Info Demand", statut: "Resolved", priorite: "Normal" },
    { id: 5, type: "Course", description: "Poor course structure", statut: "urgent", priorite: "urgent" },
  ];
  
  // Update the total complaints counter
  function updateTotalReclamations() {
    const total = reclamations.length;
    document.getElementById("total-reclamations").textContent = `Total Number Of Complaints : ${total}`;
  }
  
  // Populate the table with complaints
  function updateTable(data) {
    const tableBody = document.getElementById("reclamations-list");
    tableBody.innerHTML = ""; // Clear existing rows
  
    data.forEach(r => {
      const urgentClass = r.priorite === "urgent" ? "urgent" : "";
      tableBody.innerHTML += `
        <tr class="${urgentClass}">
          <td>${r.id}</td>
          <td>${r.type}</td>
          <td>${r.description}</td>
          <td>${r.statut}</td>
          <td>
            <button onclick="viewReclamation(${r.id})">Consult</button>
            <button onclick="resolveReclamation(${r.id})">Solve</button>
            <button onclick="refuseReclamation(${r.id})">Refuse</button>
          </td>
        </tr>`;
    });
  }
  
  // Apply filters based on the selected type
  document.getElementById("apply-filters").addEventListener("click", () => {
    const selectedType = document.getElementById("type-filter").value;
    const filtered = selectedType === "all"
      ? reclamations
      : reclamations.filter(r => r.type === selectedType);
    updateTable(filtered);
  });
  
  // Filter urgent complaints
  document.getElementById("urgent-filter").addEventListener("click", () => {
    const urgentReclamations = reclamations.filter(r => r.priorite === "urgent");
    updateTable(urgentReclamations);
  });
  
  // View a complaint
  function viewReclamation(id) {
    const reclamation = reclamations.find(r => r.id === id);
    document.getElementById("reclamation-details").innerHTML = `
      <p><strong>ID:</strong> ${reclamation.id}</p>
      <p><strong>Type:</strong> ${reclamation.type}</p>
      <p><strong>Description:</strong> ${reclamation.description}</p>
      <p><strong>Statut:</strong> ${reclamation.statut}</p>
    `;
    switchPage("page2");
  }
  
  // Resolve a complaint
  function resolveReclamation(id) {
    const reclamation = reclamations.find(r => r.id === id);
    document.getElementById("resolution-details").innerHTML = `
      <p><strong>ID:</strong> ${reclamation.id}</p>
      <p><strong>Type:</strong> ${reclamation.type}</p>
      <p><strong>Description:</strong> ${reclamation.description}</p>
    `;
    switchPage("page3");
  }
  
  // Refuse a complaint
  
 
function refuseReclamation(id) {
    // Afficher le message de refus au centre de la page
    document.getElementById("refusal-message").classList.remove("hidden");
  }
  
  // Fermer le message de refus
  document.getElementById("close-refusal").addEventListener("click", () => {
    document.getElementById("refusal-message").classList.add("hidden");
  });
  
  
  // Back to main page
  document.getElementById("back-to-page1").addEventListener("click", () => switchPage("page1"));
  document.getElementById("back-to-page1-resolver").addEventListener("click", () => switchPage("page1"));
  
  // Switch between pages
  function switchPage(pageId) {
    document.querySelectorAll(".page").forEach(page => page.classList.remove("active"));
    document.getElementById(pageId).classList.add("active");
  }
  
  // Initialize statistics chart
  function renderStatsChart() {
    const ctx = document.getElementById("statsChart").getContext("2d");
  
    const typeCounts = {
      Course: 0,
      Professor: 0,
      Technic: 0,
      Others: 0,
    };
  
    reclamations.forEach(r => {
      typeCounts[r.type]++;
    });
  
    new Chart(ctx, {
      type: "pie",
      data: {
        labels: ["Courses", "Professor", "Technic Problem", "Others"],
        datasets: [{
          data: [
            typeCounts.Course,
            typeCounts.Professor,
            typeCounts.Technic,
            typeCounts.Others,
          ],
          backgroundColor: ["#4CAF50", "#FFC107", "#00BCD4", "#9C27B0"],
        }],
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
      },
    });
  }
  
  // Initial load
  updateTotalReclamations();
  updateTable(reclamations);
  renderStatsChart();
  