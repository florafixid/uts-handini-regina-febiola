# CI_Febiola-main

Panduan singkat untuk mengupload proyek ini ke GitHub (menggunakan GitHub Desktop atau terminal).

1) Menggunakan GitHub Desktop
- Buka GitHub Desktop.
- File → Add local repository → pilih folder proyek: `/Applications/XAMPP/xamppfiles/htdocs/CI_Febiola-main` → Add repository.
- Jika belum ada commit, buat commit awal (Summary: "Initial commit").
- Pilih `Repository` → `Publish` untuk membuat repo baru di GitHub dan push.

2) Menggunakan terminal (alternatif)
```bash
cd /Applications/XAMPP/xamppfiles/htdocs/CI_Febiola-main
git init
git add .
git commit -m "Initial commit"
# Jika sudah membuat repo di GitHub via website:
git remote add origin https://github.com/<your-username>/<your-repo>.git
git branch -M main
git push -u origin main

# Atau gunakan GH CLI (jika terpasang):
gh repo create <your-repo> --public --source=. --remote=origin --push
```

Ganti `<your-username>` dan `<your-repo>` sesuai akun dan nama repository Anda.

Catatan: Periksa dan sesuaikan `.gitignore` sebelum men-commit jika perlu.
