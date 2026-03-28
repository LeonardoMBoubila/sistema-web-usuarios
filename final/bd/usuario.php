<?php
class Usuario {
    public $id;
    public $email;
    public $contraseña;
    public $adm;
    public $imagen;

    public function __construct($id, $email, $contraseña, $adm, $imagen) {
        $this->id = $id;
        $this->email = $email;
        $this->contraseña = $contraseña;
        $this->adm = $adm;
        $this->imagen = $imagen;
    }

    public static function findAll($conexion) {
        $sql = "SELECT id, email, contraseña, adm, imagen FROM usuarios";
        $res = $conexion->query($sql);
        $arr = [];
        while ($row = $res->fetch_assoc()) {
            $arr[] = new Usuario(
                $row['id'],
                $row['email'],
                $row['contraseña'],
                $row['adm'],
                $row['imagen']
            );
        }
        return $arr;
    }

    public static function findById($conexion, $id) {
        $stmt = $conexion->prepare("SELECT id, email, contraseña, adm, imagen FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($row = $res->fetch_assoc()) {
            return new Usuario($row['id'], $row['email'], $row['contraseña'], $row['adm'], $row['imagen']);
        }
        return null;
    }
}
?>