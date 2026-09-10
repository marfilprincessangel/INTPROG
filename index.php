<?php
$members = [
    [
        "name" => "Turingan, Ma. Miracle",
        "role" => "20 Years Old · Frontend",
        "image" => "member1.jpeg",
        "bio" => "AY, AYY, AYYYYYYYYYYYYYYYYYY",
        "instagram" => "https://www.instagram.com/mi_ramennotyours"
    ],
    [
        "name" => "Candava, Princess Xyrah",
        "role" => "Backend / 20",
        "image" => "member2.jpg",
        "bio" => "AYY LAVEEEEEEET!!",
        "instagram" => "https://www.instagram.com/xyrahcandava"
    ],
    [
        "name" => "Ramos, Kyla",
        "role" => "Web Designer / 20",
        "image" => "member3.jpg",
        "bio" => "okay na to",
        "instagram" => "https://www.instagram.com/kialaramos"
    ],
    [
        "name" => "Ramirez, Kleine Cyrus",
        "role" => "Backend / 21",
        "image" => "member4.jpg",
        "bio" => "ano",
        "instagram" => "https://www.instagram.com/ramirezkleined"
    ],
    [
        "name" => "Marfil, Princess Angel",
        "role" => "Database / 19",
        "image" => "member5.jpg",
        "bio" => "Geww",
        "instagram" => "https://www.instagram.com/prncs_ngel"
    ],
    [
        "name" => "Pedida, Janelle",
        "role" => "Web Designer / 19",
        "image" => "member6.jpg",
        "bio" => "Goodness Gracious",
        "instagram" => "https://www.instagram.com/jnllegm"
    ],
    [
        "name" => "Dela Rea, Aizel Nicole",
        "role" => "DEVELOPER ADMINISTRATOR / 19",
        "course" => "BSIT",
        "year" => "3rd Year",
        "image" => "member7.jpg",
        "bio" => "From this, To this",
        "instagram" => "https://www.instagram.com/nclvx_co"
    ]
];

$search = trim($_GET['search'] ?? '');

if ($search !== '') {
    $members = array_filter($members, function ($member) use ($search) {
        return stripos($member['name'], $search) !== false;
    });
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>GROUP<span>-</span>1</h1>
    <p class="subtitle">1, 2, 3, Go kanya kanya na</p>
    <div class="accent-line"></div>
</header>

<main>
    <section class="request-panel">
        <!-- Search Form -->
        <form method="get" action="index.php" class="search-form">
            <label for="search">Find a member</label>
            <input type="search" id="search" name="search" 
                   value="<?= htmlspecialchars($search) ?>" 
                   placeholder="Search by name">
            <button type="submit">Search</button>
        </form>

        <!-- Send a message form -->
        <form method="post" class="post-form">
            <label>Send a message</label>
            <textarea name="message" rows="3" placeholder="Enter your message"></textarea>
            <button type="submit">Send message</button>
        </form>
    </section>

    <div class="team-grid">
        <?php foreach ($members as $member): ?>
            <article class="member-card">
                <div class="photo-wrapper">
                    <img src="<?= htmlspecialchars($member['image']) ?>" 
                         alt="<?= htmlspecialchars($member['name']) ?>">
                </div>
                <div class="card-body">
                    <h2 class="name"><?= htmlspecialchars($member['name']) ?></h2>
                    <p class="role">
                        <?= htmlspecialchars($member['role']) ?>
                        <?= isset($member['year']) ? ' · ' . htmlspecialchars($member['year']) : '' ?>
                    </p>
                    <?php if (!empty($member['course'])): ?>
                        <p class="bio"><?= htmlspecialchars($member['course']) ?></p>
                    <?php endif; ?>
                    <a href="<?= htmlspecialchars($member['instagram']) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="instagram-link">
                        📷 Visit Instagram
                    </a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    © 2026 Group 1 · Built with HTML, CSS & PHP
</footer>

</body>
</html>
