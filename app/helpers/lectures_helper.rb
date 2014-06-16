module LecturesHelper

  def current_lecture(lecture)
    if lecture == Lecture.current_studio || lecture == Lecture.current_lab
      'current'
    end
  end
end
