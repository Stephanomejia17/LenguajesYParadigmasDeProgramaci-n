ThisBuild / version := "0.1.0-SNAPSHOT"
ThisBuild / scalaVersion := "2.13.12"

lazy val root = (project in file("."))
  .settings(
    name := "Automoviles-1",
    libraryDependencies ++= Seq(
      "org.json4s" %% "json4s-native" % "4.0.6",
      "org.json4s" %% "json4s-dsl" % "4.0.6"
    )
  )