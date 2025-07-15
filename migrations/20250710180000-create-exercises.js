'use strict';

module.exports = {
  async up(queryInterface, Sequelize) {
    await queryInterface.createTable('Exercises', {
      ExerciseID: {
        type: Sequelize.INTEGER,
        primaryKey: true,
        autoIncrement: true,
        allowNull: false
      },
      name: {
        type: Sequelize.STRING,
        allowNull: false
      },
      description: {
        type: Sequelize.TEXT
      },
      duration: {
        type: Sequelize.INTEGER
      },
      image: {
        type: Sequelize.STRING
      }
      // **MOS SHTO createdAt dhe updatedAt**
    });
  },

  async down(queryInterface, Sequelize) {
    await queryInterface.dropTable('Exercises');
  }
};
