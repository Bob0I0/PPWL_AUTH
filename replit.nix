{ pkgs }: {
  deps = [
    pkgs.nodejs-16_x
    pkgs.php82
    pkgs.php82Packages.composer
    pkgs.vim
  ];
}