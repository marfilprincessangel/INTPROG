const members = [
  {
    name: "Turingan, Ma. Miracle",
    role: "20 Years Old · Frontend",
    image: "member1.jpeg",
    bio: "AY, AYY, AYYYYYYYYYYYYYYYYYY",
    instagram: "https://www.instagram.com/mi_ramennotyours"
  },
  {
    name: "Candava, Princess Xyrah",
    role: "Backend / 20",
    image: "member2.jpg",
    bio: "AYY LAVEEEEEEET!!",
    instagram: "https://www.instagram.com/xyrahcandava"
  },
  {
    name: "Ramos, Kyla",
    role: "Web Designer / 20",
    image: "member3.jpg",
    bio: "okay na to",
    instagram: "https://www.instagram.com/kialaramos"
  },
  {
    name: "Ramirez, Kleine Cyrus",
    role: "Backend / 21",
    image: "member4.jpg",
    bio: "ano",
    instagram: "https://www.instagram.com/ramirezkleined"
  },
  {
    name: "Marfil, Princess Angel",
    role: "Database / 19",
    image: "member5.jpg",
    bio: "Geww",
    instagram: "https://www.instagram.com/prncs_ngel"
  },
  {
    name: "Pedida, Janelle",
    role: "Web Designer / 19",
    image: "member6.jpg",
    bio: "Goodness Gracious",
    instagram: "https://www.instagram.com/jnllegm"
  },
  {
    name: "Dela Rea, Aizel Nicole",
    role: "DEVELOPER ADMINISTRATOR / 19",
    course: "BSIT",
    year: "3rd Year",
    image: "member7.jpg",
    bio: "From this, To this",
    instagram: "https://www.instagram.com/nclvx_co"
  }
];

const container = document.getElementById("member-container");

function renderMembers(list) {
  container.innerHTML = "";

  list.forEach(member => {
    const article = document.createElement("article");
    article.className = "member-card";

    article.innerHTML = `
      <div class="photo-wrapper">
        <img src="${member.image}" alt="${member.name}">
      </div>
      <div class="card-body">
        <h2 class="name">${member.name}</h2>
        <p class="role">${member.role}${member.year ? " · " + member.year : ""}</p>
        ${member.course ? `<p class="bio">${member.course}</p>` : ""}
        <a href="${member.instagram}" target="_blank" rel="noopener noreferrer" class="instagram-link">
          📷 Visit Instagram
        </a>
      </div>
    `;

    container.appendChild(article);
  });
}

renderMembers(members);

document.getElementById("searchForm").addEventListener("submit", function(e) {
  e.preventDefault();
  const search = document.getElementById("search").value.trim().toLowerCase();

  if (search === "") {
    renderMembers(members);
  } else {
    const filtered = members.filter(m => m.name.toLowerCase().includes(search));
    renderMembers(filtered);
  }
});
