class getFormAction {
  public $pdo;

  	function __construct()	{
        try{
            $this -> pdo = new PDO( PDO_DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
          } catch (PDOException $e){
              echo 'error' . $e->getMessage();
              die();
          }
        }

        function saveDbPostData($data){

        $smt = $this->pdo->prepare('insert into post (Drone_Image,longtitude,latitude,created_at,updated_at) values(:Drone_Image,:longtitude,:latitude,now(),now())');

        $smt->bindParam(':name',$data['Drone_Image'], PDO::PARAM_STR);

        $smt->bindParam(':email',$data['longtitude'], PDO::PARAM_STR);

        $smt->bindParam(':body',$data['latitude'], PDO::PARAM_STR);

        $smt->execute();

      }
}
